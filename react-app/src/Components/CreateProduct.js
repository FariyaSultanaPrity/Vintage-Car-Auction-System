import React, {useState, userEffect} from 'react';
import axios from "axios";

import { useNavigate  } from "react-router-dom";



const CreateProduct = () =>{
  
    let[model, setModel] = useState("");
    let[color, setColor] = useState("");
    let[glass, setGlass] = useState("");
    let[wheel_size, setWheelSize] = useState("");
    let[body, setBody] = useState("");
   

    const Post = () =>{
        var obj = {model: model, color: color, glass: glass, wheel_size: wheel_size, body: body};
        console.log(obj);
        axios.post("http://127.0.0.1:8000/api/catagory/list-post",obj)
        .then(resp=>{
            var response = resp.data;
         

            if(response.message === "Post Failed"){

                    document.getElementById('msg').innerHTML = response.message;
            }
            else{
               
              
        }

        }).catch(err=>{
            console.log(err);
        });
    }

    return(

        <div className='container-fluid vh-100 '>

            <div className='mt-100'>
                <div className='rounded d-flex justify-content-center mt-10'>
                    <div className='col-md-4 col-sm-12 shadow-lg bg-light'>
                        <div className='text-center'>
                            <h3 className='text-primary '>Post</h3>
                        </div>
                        <form className='form-group p-4 '>



                                <div className='input-group mb-3'>
                                    <span className='input-group-text bg-primary'>
                                        <i className='bi bi-person-plus-fill text-white'></i>
                                    </span>
                                    <input type="text" className='form-control' name="model" id="username" placeholder='Model' value={model} onChange={(e)=>setModel(e.target.value)}></input>
                                </div>



                                <div className='input-group mb-3'>
                                    <span className='input-group-text bg-primary'>
                                        <i className='bi bi-key-fill text-white'></i>
                                    </span>
                                    <input type="text" className='form-control' name="color" id="color" placeholder='Color' value={color} onChange={(e)=>setColor(e.target.value)}></input>
                                </div>

                                <div className='input-group mb-3'>
                                    <span className='input-group-text bg-primary'>
                                        <i className='bi bi-key-fill text-white'></i>
                                    </span>
                                    <input type="text" className='form-control' name="glass" id="glass" placeholder='Glass' value={glass} onChange={(e)=>setGlass(e.target.value)}></input>
                                </div>

                                <div className='input-group mb-3'>
                                    <span className='input-group-text bg-primary'>
                                        <i className='bi bi-key-fill text-white'></i>
                                    </span>
                                    <input type="text" className='form-control' name="wheel_size" id="color" placeholder='Wheel_Size' value={wheel_size} onChange={(e)=>setWheelSize(e.target.value)}></input>
                                </div>

                                <div className='input-group mb-3'>
                                    <span className='input-group-text bg-primary'>
                                        <i className='bi bi-key-fill text-white'></i>
                                    </span>
                                    <input type="text" className='form-control' name="body" id="body" placeholder='Body' value={body} onChange={(e)=>setBody(e.target.value)}></input>
                                </div>




                         </form>
                                <div className="d-grid col-12 mx-auto p-4">
                                    <button type='submit' className="btn btn-primary" onClick={Post}>Sign In</button>
                                </div>
                                <div className="d-grid col-12 mx-auto p-4">
                                <h1 id='msg'></h1>
                                </div>

                              

                               




                    </div>
                </div>
            </div>
        </div>

    )
}
export default CreateProduct;