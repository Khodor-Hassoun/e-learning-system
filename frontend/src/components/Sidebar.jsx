import Link from "./Link";

const Sidebar = ({array})=>{
    return(
        <section className="sidebar-sec">
            {/* {array.map(({destination,text}) =>{
                return <p>{text}</p>
            })} */}
            <p>Add course</p>
            <p>Add Instructor</p>
            {/* <p></p>
            <p>Text</p>
            <p>Text</p>
            <p>Text</p> */}
        </section>
    )
}
export default Sidebar