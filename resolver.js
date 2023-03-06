const airports = [
  {
    name: 'Murtala Muhammed International Airport',
    latitude: 6.5774,
    longitude: 3.321,
  },
  {
    name: 'Cairo International Airport',
    latitude: 30.1219,
    longitude: 31.4056,
  },
  {
    name: 'Jomo Kenyatta International Airport',
    latitude: -1.3192,
    longitude: 36.9278,
  },
  {
    name: 'Cape Town International Airport',
    latitude: -33.9715,
    longitude: 18.6021,
  },
]

const resolver = {
  airports: () => airports,

  airport: ({ name }) => {
    return airports.find((airport) => airport.name === name)
  },
}

module.exports = resolver
