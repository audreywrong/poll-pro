import React, { useState } from "react";
import "../../css/app.css";

const Profile = () => {
    return (
        <>
            <div className="profile-container">
                <div className="graph-container">
                    <img
                        src="../../svg/bar-graph-fruit.svg"
                        className="graph"
                    />
                </div>
                <div className="profile-information">
                    <div>
                        <h1>Welcome </h1>
                    </div>
                    <div className="create-poll-button">Create a New Poll!</div>
                </div>
            </div>
        </>
    );
};

export default Profile;
