import React, { useEffect, useState } from "react";
import "./assets/css/Preloader1.css";
import PageWrapper from "./PageWrapper";
import Home from "./Pages/Home";

function Preloader1() {
  const [data, setData] = useState([]);
  const [loading, setloading] = useState(undefined);
  const [completed, setcompleted] = useState(undefined);

  useEffect(() => {
    setTimeout(() => {
      fetch("https://jsonplaceholder.typicode.com/posts")
        .then((response) => response.json())
        .then((json) => {
          console.log(json);

          setData(json);
          setloading(true);

          setTimeout(() => {
            setcompleted(true);
          }, 0);
        });
    }, 550);
  }, []);

  return (
    <div>
      {!completed ? (
        <>
          {!loading ? (
            <div className="spinner">
              <span>Loading...</span>
              <div className="half-spinner"></div>
            </div>
          ) : (
            <PageWrapper>
              <Home />
            </PageWrapper>
          )}
        </>
      ) : (
        <PageWrapper>
          <Home />
        </PageWrapper>
      )}
    </div>
  );
}

export default Preloader1;
