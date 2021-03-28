import React, { useState } from "react";
import "../../css/app.css";
import WelcomeGraph from "./WelcomeGraph";

const Profile = () => {
    const [user] = useState(GUSER);

    return (
        <>
            <div className="top-profile-container">
                <div className="welcome-message">
                    <h1>Welcome {user}!</h1>
                </div>
                <div className="poll-message">
                    <p>Poll Vote Distribution</p>
                </div>
                <div className="graph-container">
                    <WelcomeGraph />
                </div>
            </div>
            <div className="bottom-profile-container">
                <div className="active-polls">
                    <h3>Your Active Polls</h3>
                </div>
            </div>
        </>
    );
};

export default Profile;
