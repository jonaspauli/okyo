
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    colors: {
      'okyo-orange' : '#FFB800',
      'okyo-black' : '#0F0B00',
      'okyo-white' : '#F3F1EC',
      'okyo-tinted' : '#44300B', 
    },
    container: {
      center: true,
    },
    fontFamily: {
      sans: ['Spartan', 'sans-serif'],
    },
    extend: {
      spacing: {
        '75vh': '75vh',
        '128': '32rem',
        '80vh' : '80vh',
        '60vh' : '60vh',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
  ],
}