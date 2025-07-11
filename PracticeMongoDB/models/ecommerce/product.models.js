import mongoose from "mongoose";

const productSchema = new mongoose.Schema({
    description : {
        type : String, 
        required : true 
    },

    name : {
        type : String,
        required : true
    },
    
    productImage : {
        type : String // url le lege and uske help se karege
    },

    price : {
        type : Number,
        default : 0
    },

    stock :{
        type : Number,
        default : 0
    },

    category : {
        type : mongoose.Schema.Types.ObjectId,
        ref : "Category",
        required : true
    },

    owner : {
        type : mongoose.Schema.Types.ObjectId,
        ref : "User"
    }

    //createdBy : {},

}, {timestamps: true})

export const Product = new mongoose.model("Product",productSchema)