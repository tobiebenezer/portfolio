import express from 'express';
import { httpGetAllUsers } from './user,controller';

const userRouter = express.Router();

userRouter.get('/', httpGetAllUsers);

export default userRouter;