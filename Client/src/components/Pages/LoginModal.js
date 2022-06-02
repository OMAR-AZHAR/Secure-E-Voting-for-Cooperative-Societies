import React, { useState } from "react";
import Button from "react-bootstrap/Button";
import Modal from "react-bootstrap/Modal";
//import LoginForm from "./LoginForm";
import { Link } from "react-router-dom";

// import Login from "./Login";
function LoginModal() {
  const [show, setShow] = useState(false);
  const [shown, setShown] = useState(false);
  // const [fullscreen, setFullscreen] = useState(true);
  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const VoterModal = (props) => {
    return (
      <div>
        <iframe //This is voter frame
          title={props.src}
          frameBorder="0"
          height="400px"
          src={props.src}
          width="100%"
        />
      </div>
    );
  };
  const AdminModal = (props) => {
    return (
      <div>
        <iframe
          target="_blank"
          // sandbox="allow-popups allow-same-origin allow-forms allow-scripts"
          title={props.src}
          frameBorder="0"
          height="400px"
          src={props.src}
          width="100%"
        />
      </div>
    );
  };
  // const ETAModal = (props) => {
  //   return (
  //     <div>
  //       <iframe
  //         title={props.src}
  //         allowFullScreen
  //         frameBorder="0"
  //         height="400px"
  //         src={props.src}
  //         width="100%"
  //       />
  //     </div>
  //   );
  // };

  return (
    <div>
      <Link
        to=""
        id="/"
        className="nav-link"
        variant="primary"
        onClick={handleShow}
      >
        SIGN IN
      </Link>
      {/* fullscreen={fullscreen} */}
      <Modal
        style={{ padding: "0 !important" }}
        // style={{ opacity: "0.95" }}
        // fullscreen={fullscreen}
        show={show}
        onHide={handleClose}
      >
        <Modal.Header closeButton>
          <Modal.Title>
            SIGN IN AS &nbsp;
            <Button onClick={() => setShown(!shown)}>Admin-ETA</Button> &nbsp;
            <Button onClick={() => setShown(!shown)}>Voter</Button>
            {/* <Button onClick={() => setShown(!shown)}>ETA</Button>{" "} */}
          </Modal.Title>
        </Modal.Header>
        <Modal.Body>
          {!shown ? (
            <VoterModal src="http://localhost/SEVCS_II/Server/votesystem/" />
          ) : null}{" "}
          {shown ? (
            <AdminModal src="http://localhost/SEVCS_II/Server/votesystem/admin" />
          ) : null}
          {/* {!shown ? (
            <ETAModal src="http://localhost/SEVCS_II/Server/votesystem/ETA" />
          ) : null} */}
        </Modal.Body>
        <Modal.Footer>
          <div className="col-sm-10 text-lg-start">
            <strong> Copyright &copy; 2021 SEVCS</strong>
          </div>
          <Button variant="secondary" onClick={handleClose}>
            Quit
          </Button>
        </Modal.Footer>
      </Modal>
    </div>
  );
}

export default LoginModal;
