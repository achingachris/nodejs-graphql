const express = require('express')
// const graphqlHTTP = require('express-graphql');
const graphqlHTTP = require('express-graphql').graphqlHTTP

const schema = require('./schema')
const resolver = require('./resolver')

const app = express()

app.use(
  '/graphql',
  graphqlHTTP({
    schema: schema,
    rootValue: resolver,
    graphiql: true,
  })
)

app.listen(4000, () => {
  console.log('GraphQL API running on http://localhost:4000/graphql')
})
