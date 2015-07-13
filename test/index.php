<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="js/React/react.js"></script>
    <script src="js/React/JSXTransformer.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.1.1.js"></script>

    <style>


    </style>
</head>
<body>

<script type="text/jsx">

            var TableChessCell = React.createClass({
                render: function () {
                    return (<td onClick={this.handleClick}><i className="fa fa-user-secret"></i></td>);
                },

                handleClick: function(event) {
                    alert(1);
                },
            });


            var SelectSize = React.createClass({
                render: function () {
                    return (
                        <select onChange={this.handleClick}>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                        </select>
                    );
                },

                handleClick: function(event) {
                    React.render(
                        <div className="wrap-content">
                            <SelectSize />
                            <TableChess size={event.target.value} />
                        </div>
                    , document.body);

                },
            });


            var TableChess = React.createClass({
                render: function () {
                    var rows = [];

                    if(this.props.size > 0){
                        for(var i = 1; i <= this.props.size; i++){
                            var cells = [];
                            for(var j = 1; j <= this.props.size; j++){
                                cells.push(
                                    <TableChessCell />
                                );
                            }
                            rows.push(
                                <tr>{cells}</tr>
                            );
                        }
                    }

                    return (<table>{rows}</table>);
                }
            });


            var sizeDefault = 5;
            React.render(
                <div className="wrap-content">
                    <SelectSize />
                    <TableChess size={sizeDefault} />
                </div>
            , document.body);


        </script>
</body>
</html>