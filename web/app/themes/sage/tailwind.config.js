// tailwind.config.js
export default {
  content: [
    './resources/**/*.{js,jsx,ts,tsx,vue,php,html,blade.php}',
    './app/**/*.{php,html,blade.php}',
    './components/**/*.{php,html,blade.php}',
    './blocks/**/*.{php,html,blade.php}',
    './theme.json',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#c78b45',
        secondary: '#2b201b',
        tertiary: '#f2f2f2',
      },
      fontFamily: {
        sans: ['"Inter"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
