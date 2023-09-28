import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree'],
                albert: ['Albert Sans', 'serif'],
            },
            colors: {
                'primary': '#4F55C1',
            },
        },
    },
    plugins: [],
}
