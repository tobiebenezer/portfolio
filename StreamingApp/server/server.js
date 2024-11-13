import http from 'http';
import app from './src/app';
import config from "dotenv";
import { Sequelize } from 'sequelize';
import dbConfig from '../app/config/db.config';

config();

const sequelize = new Sequelize(dbConfig.DB, dbConfig.USER, dbConfig.PASSWORD,{
    host: dbConfig.HOST,
    dialect:dbConfig.dialect,
    port: dbConfig.port,
    operatorsAliases: false,
    pool:{
        max: dbConfig.pool.max,
        min: dbConfig.pool.min,
        acquire: dbConfig.pool.acquire,
        idle: dbConfig.pool.idle
    }
})

const PORT = process.env.PORT || 8000;

const server = http.createServer(app);

async function startServer(){
    server.listen(PORT, ()=>{
        console.log(`listening on port ${PORT}`);
    });
}

startServer();