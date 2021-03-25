import React from "react";
import ReactDOM from "react-dom";
import Profile from "./Profile";

const Index = () => {
    return (
        <>
            <Profile />
        </>
    );
};

ReactDOM.render(<Index />, document.getElementById("index"));
