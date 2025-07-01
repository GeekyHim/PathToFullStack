import mongoose, { mongo } from "mongoose";

const doctorSchema = new mongoose.Schema({
    name : {
        type : String, 
        required : true
    },
    salary : {
        type : String, // aage piche rs lgana ya kuch etc. 
        required : true
    },
    qualification : {
        type : String, 
        required : true
    },
    experienceInYears : {
        type : Number, 
        default : 0
    },
    worksInHospital : {
        type : [{
            type : mongoose.Schema.Types.ObjectId,
            ref : "Hospital"
        }
    ], 
        required : true
    },

},{timestamps: true})

export const Doctor = new mongoose.model("Doctor",doctorSchema) 