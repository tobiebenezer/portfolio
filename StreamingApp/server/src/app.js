import express from "express";
import morgan from "morgan";
import path from 'path';
import cors from 'cors';
import api from "../routes/api";

const app = express();

app.use(cors({
    origin:"*",
}));

app.use(morgan('combined'));
app.use(express.json());
app.use('/v1',api)

export default app;
