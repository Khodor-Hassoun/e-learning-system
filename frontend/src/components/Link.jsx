import { useState } from "react";

export default function Link ({text, destination}){

    return(
        <div>
        <p>{text}</p>
        <p className="hidden">{destination}</p>
        </div>
    )
}