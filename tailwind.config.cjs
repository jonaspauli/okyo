
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
      }
    },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
}