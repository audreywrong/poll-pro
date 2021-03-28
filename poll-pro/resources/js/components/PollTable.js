import React from "react";
import { DataGrid } from "@material-ui/data-grid";

const PollTable = () => {
    const rows = GPOLLS.map((poll) => ({
        ...poll,
        created_at: new Date(poll.created_at).toLocaleString(),
    }));

    const columns = [
        //From larapoll_polls table
        { field: "id", headerName: "ID", width: 70 },
        { field: "question", headerName: "Question", width: 300 },
        { field: "created_at", headerName: "Created", width: 300 },
        //From larapoll_options table
        {
            field: "votes_count",
            headerName: "Number of Votes",
            type: "int",
            width: 175,
        },
    ];

    return (
        <div style={{ height: 400, width: "100%" }}>
            <DataGrid rows={rows} columns={columns} pageSize={5} />
        </div>
    );
};

export default PollTable;
