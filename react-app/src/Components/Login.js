import React, {useState, userEffect} from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

const Login = ()=>{
    let[token, setToken]= useState("");
    let[U_Email, setU_Email] = useState("");
    let[U_Pass, setU_Pass] =useState("");
    const navigate = useNavigate();

    const loginSubmit= ()=>{
        var obj = {U_Email: U_Email, U_Pass: U_Pass};
   
        axios.post("http://127.0.0.1:8000/api/login",obj)
        .then(resp=>{
            var token = resp.data;
         
            var user = {userId: token.U_Id, access_token:token.tokenn};
          
            localStorage.setItem('user',JSON.stringify(user));
           
            if(token == "No user found"){
                navigate('/login');
            }else{
                navigate('/dash');
            }
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div>
            <form>
                <input type="text" value={U_Email} onChange={(e)=>setU_Email(e.target.value)}></input>
                <input type="password" value={U_Pass} onChange={(e)=>setU_Pass(e.target.value)}></input>

            </form>
                <button onClick={loginSubmit}>Login</button>
        </div>

    )
}
export default Login; 