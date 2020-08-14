const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: {
        content: [
            './app/DataTables/*.php',
            './resources/views/**/**/*.php'
        ],
        defaultExtractor: content => content.match(/[\w-:/]+(?<!:)/g) || []
    },
    prefix: 'tw-',
    important: true,
    separator: ':',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ],
}
