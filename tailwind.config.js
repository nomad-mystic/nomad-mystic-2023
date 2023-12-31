/** @type {import('tailwindcss').Config} config */
const config = {
    content: [
        './index.php',
        './app/**/*.php',
        './resources/**/*.{php,vue,js}'
    ],
    theme: {
        extend: {
            colors: {
                'teal': 'var(--color-teal)',
                'teal-light': 'var(--color-teal-light)',
                'purple': 'var(--color-purple)',
                'purple-light': 'var(--color-purple-light)',
                'dark-grey': 'var(--color-dark-grey)',
                'white': 'var(--color-white)',
                'black': 'var(--color-black)',
                'black-full': 'var(--color-black-full)',
                'dark-theme-white': 'var(--color-dark-theme-white)',
                'dark-theme-black': 'var(--color-dark-theme-black)',
            },
            container: {
                padding: {
                    DEFAULT: '1rem',
                    sm: '2rem',
                    lg: '4rem',
                    xl: '5rem',
                    '2xl': '6rem',
                },
            },
        },
    },
    plugins: [
        {
            'postcss-import': {},
            'tailwindcss/nesting': 'postcss-nested',
            'autoprefixer': {}
        }
    ]
};

export default config;
