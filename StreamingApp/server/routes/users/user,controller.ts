
export async function httpGetAllUsers(req,res){
    return res.status(200).json([
        {
            name:"kemi",
            sex: 'F'
        },
        {
            name: "binbo",
            sex:'F'
        }
    ]);
}


