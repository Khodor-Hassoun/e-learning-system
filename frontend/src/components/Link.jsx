import { useState } from "react";

export default function Link ({text, destination}){
    const linkP = document.createElement('p')
    linkP.setAttribute('destination', destination)
    linkP.innerText = text
    linkP.classList.add('link-p')
    return(
        linkP
    )
}