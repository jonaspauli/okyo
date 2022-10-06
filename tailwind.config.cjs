module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    colors: {
      'okyo-orange' : '#FFB800',
      'okyo-black' : '#0F0B00',
      'okyo-white' : '#F3F1EC',
    },
    fontFamily: {
      sans: ['Spartan', 'sans-serif'],
    },
    extend: {
      backgroundImage: {
        'logo': "url('~@images/logo_hero.svg')",
      }
    },
  plugins: [],
}
}