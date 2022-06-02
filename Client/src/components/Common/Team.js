import React from "react";
import TeamMembers from "./TeamMembers";
// import { Link } from "react-router-dom";
//import image
import team1 from "../assets/img/team/1.jpg";
// import team2 from "../assets/img/team/2.jpg";
// import team3 from "../assets/img/team/3.jpg";
// import logos
// import logo1 from "../assets/img/logos/google.svg";
// import logo2 from "../assets/img/logos/facebook.svg";
// import logo3 from "../assets/img/logos/ibm.svg";
// import logo4 from "../assets/img/logos/microsoft.svg";
const teamitem = [
  {
    image: team1,
    name: "Omar Azhar Malik",
    position: "Full Stack Developer - SEO - Content Creator",
  },
  {
    image: team1,
    name: "Dr. Abdul Nasir Khan",
    position: "Project Supervisor",
  },
  {
    image: team1,
    name: "Muhammad Umer Khan",
    position: "Software Engineer - Technical Writer",
  },
];

class Team extends React.Component {
  render() {
    return (
      <div>
        <section className="page-section bg-light" id="team">
          <div className="container">
            <div className="text-center">
              <h2 className="section-heading text-uppercase">Project Team</h2>
              <h3 className="section-subheading text-muted">
                FYP is Sponsored By:
              </h3>
            </div>
            <div className="row">
              {teamitem.map((tm, i) => {
                return <TeamMembers {...tm} key={i} />;
              })}
            </div>
            <div className="row">
              <div className="col-lg-8 mx-auto text-center">
                <p className="large text-muted">
                  The Project is Secure Electronic Voting which is a web-based
                  system. It is being developed for Cooperative Societies like
                  Academic Staff Association (ASA). The system will ensure a
                  quick and accurate voting platform available online. The
                  system will ensure protection from Voting fraud, corruption,
                  voter’s privacy, and vote integrity. Project Team is dedicated
                  and is consistently working hard to achieve specified goals. 
                </p>
              </div>
            </div>
          </div>
        </section>
        {/* <div className="py-5">
          <div className="container">
            <div className="row align-items-center">
              <div className="col-md-3 col-sm-6 my-3">
                <Link to="#!">
                  <img
                    className="img-fluid img-brand d-block mx-auto"
                    src={logo4}
                    alt="..."
                  />
                </Link>
              </div>
              <div className="col-md-3 col-sm-6 my-3">
                <Link to="#!">
                  <img
                    className="img-fluid img-brand d-block mx-auto"
                    src={logo3}
                    alt="..."
                  />
                </Link>
              </div>
              <div className="col-md-3 col-sm-6 my-3">
                <Link to="#!">
                  <img
                    className="img-fluid img-brand d-block mx-auto"
                    src={logo2}
                    alt="..."
                  />
                </Link>
              </div>
              <div className="col-md-3 col-sm-6 my-3">
                <Link to="#!">
                  <img
                    className="img-fluid img-brand d-block mx-auto"
                    src={logo1}
                    alt="..."
                  />
                </Link>
              </div>
            </div>
          </div>
        </div> */}
      </div>
    );
  }
}
export default Team;
