import Button from "./Button";

export default function Navbar(){
    return (
        <section className="navbar-sec">
            <div>
                <h1>Learner.com</h1>
            </div>
            <div>
                <Button text={'Log Out'} />
            </div>
        </section>
    )
}