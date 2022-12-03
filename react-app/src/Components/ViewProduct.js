import { Link } from "react-router-dom";
import axios from "axios";
import React, {useEffect, useState} from "react";
import axiosConfig from './axiosConfig';


const ViewProduct = () => {

    const [products, setProducts] = useState ([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/catagory/list")
        .then(resp=>{
            
            setProducts(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);

    return(
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Glass</th>
                </tr>
                {products.map(product=>(
                    <tr key={product.id}>
                        <td>{product.id}</td>
                        <td>{product.Model}</td>
                        <td>{product.Color}</td>
                        <td>{product.Glass}</td>
                    </tr>
                ))}
            </table>
          
        </div>
    );

}

export default ViewProduct;