


function Card({title, instructors}){
    // const pInstructors = instructorz.map((x)=> <p>{x}</p>)
    // for(let x of instructorz){
    //     console.log(x)
    // }

    return (
        <div className="course-card">
            <h2>{title}</h2>
            {instructors.map(title => {
        return <div key={title}>{title}</div>;
      })}
        </div>
    )

}

export default Card