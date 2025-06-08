const path = require('path');
const fs = require('fs');
const webfontsGenerator = require('webfonts-generator');

class IconFontPlugin {
    constructor(options) {
        this.options = {
            svgPath: './src/icons/svg',
            fontPath: './dist/fonts',
            scssPath: './src/fonts/icons.scss',
            fontName: 'icons',
            ...options
        };
        this.lastBuildTime = 0;
    }

    apply(compiler) {
        compiler.hooks.beforeRun.tapAsync('IconFontPlugin', (compiler, callback) => {
            this.generateFonts(callback);
        });

        compiler.hooks.watchRun.tapAsync('IconFontPlugin', (compiler, callback) => {
            const svgFiles = fs.readdirSync(this.options.svgPath)
                .filter(file => file.endsWith('.svg'))
                .map(file => path.join(this.options.svgPath, file));

            const needsRebuild = svgFiles.some(file => {
                const stats = fs.statSync(file);
                return stats.mtimeMs > this.lastBuildTime;
            });

            if (needsRebuild) {
                this.generateFonts(callback);
            } else {
                callback();
            }
        });
    }

    generateFonts(callback) {
        const svgFiles = fs.readdirSync(this.options.svgPath)
            .filter(file => file.endsWith('.svg'))
            .map(file => path.join(this.options.svgPath, file));

        if (svgFiles.length === 0) {
            console.log('No SVG files found in', this.options.svgPath);
            callback();
            return;
        }

        // Ensure the dist/fonts directory exists
        if (!fs.existsSync(this.options.fontPath)) {
            fs.mkdirSync(this.options.fontPath, { recursive: true });
        }

        webfontsGenerator({
            files: svgFiles,
            dest: this.options.fontPath,
            fontName: this.options.fontName,
            css: false,
            html: false,
            templateOptions: {
                baseSelector: '.icon',
                classPrefix: 'icon-'
            },
            types: ['woff2', 'woff', 'ttf'],
            normalize: true,
            fontHeight: 1000,
            round: 10e12,
            fixedWidth: true,
            centerHorizontally: true
        }, (error) => {
            if (error) {
                console.error('Error generating icon font:', error);
                callback(error);
                return;
            }

            this.generateIconClasses();
            this.lastBuildTime = Date.now();
            console.log('Icon font generated successfully!');
            callback();
        });
    }

    generateIconClasses() {
        const svgFiles = fs.readdirSync(this.options.svgPath)
            .filter(file => file.endsWith('.svg'))
            .map(file => path.basename(file, '.svg'));

        const scssContent = `@font-face {
    font-family: '${this.options.fontName}';
    src: url(/* webpackIgnore: true */ '/wp-content/themes/psw/dist/fonts/${this.options.fontName}.woff2') format('woff2'),
         url(/* webpackIgnore: true */ '/wp-content/themes/psw/dist/fonts/${this.options.fontName}.woff') format('woff'),
         url(/* webpackIgnore: true */ '/wp-content/themes/psw/dist/fonts/${this.options.fontName}.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: block;
}

[class^="icon-"], [class*=" icon-"] {
    font-family: '${this.options.fontName}' !important;
    speak: never;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

${svgFiles.map(icon => `.icon-${icon}:before {
    content: "\\${this.getUnicodeValue(icon)}";
}`).join('\n\n')}
`;

        // Ensure the directory exists
        const scssDir = path.dirname(this.options.scssPath);
        if (!fs.existsSync(scssDir)) {
            fs.mkdirSync(scssDir, { recursive: true });
        }

        fs.writeFileSync(this.options.scssPath, scssContent);
    }

    getUnicodeValue(iconName) {
        // Generate a unique unicode value for each icon
        const hash = iconName.split('').reduce((acc, char) => {
            return char.charCodeAt(0) + ((acc << 5) - acc);
        }, 0);
        return (hash & 0xffff).toString(16).padStart(4, '0');
    }
}

module.exports = IconFontPlugin; 