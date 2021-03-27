import React, { useState } from "react";
import { DataGrid } from "@material-ui/data-grid";

const PollTable = () => {
    const rows = GPOLLS;

    const columns = [
        //From larapoll_polls table
        { field: "id", headerName: "ID", width: 70 },
        { field: "question", headerName: "Question", width: 300 },
        { field: "created_at", headerName: "Created", width: 130 },
        //From larapoll_options table
        // {
        //     field: "votes",
        //     headerName: "Number of Votes",
        //     type: "int",
        //     width: 100,
        // },
    ];

    return (
        <div style={{ height: 400, width: "100%" }}>
            <DataGrid rows={rows} columns={columns} pageSize={5} />
        </div>
    );
};

export default PollTable;
