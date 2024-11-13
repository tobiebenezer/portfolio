import express from 'express';
import userRouter from "./users/user.route";


const api = express.Router();

api.use("/users",userRouter);

export default api;
