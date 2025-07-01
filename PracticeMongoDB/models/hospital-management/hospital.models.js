import mongoose from "mongoose";

const hospitalSchema = new mongoose.Schema({
    name :{
        type :String,
        required : true
    },
    addressLine1 : {
        type : String, 
        required : true
    },
    addressLine2 : {
        type : String 
    },
    specialization : [ { type : String } ]
 

},{timestamps: true})

export const Hospital = new mongoose.model("Hospital",hospitalSchema) 