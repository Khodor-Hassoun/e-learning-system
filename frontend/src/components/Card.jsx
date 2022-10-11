function Card({title, instructors}){
    const click = ()=>{
        console.log('clicked', title)
    }
    return (
        <div className="course-card" onClick={click}>
            <h2>{title}</h2>
            {instructors.map(title => {
                return <div key={title}>{title}</div>;
            })}
        </div>
    )

}

export default Card