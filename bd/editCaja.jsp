<%-- 
    Document   : editCaja
    Created on : 11/01/2021, 08:41:21 PM
    Author     : AlejandroPlatas
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*,java.util.*"%>

<%
    String id_caja = request.getParameter("id_caja");
    Connection connection = null;
    Statement statement = null;
    ResultSet resultSet = null;
    String driver = "com.mysql.jdbc.Driver";
    connection = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
    try {
        Class.forName(driver);
    } catch (ClassNotFoundException e) {
        e.printStackTrace();
    }
%>
<%
    try {
        connection = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
        statement = connection.createStatement();
        String sql = "select * from caja where id_caja=" + id_caja;
        resultSet = statement.executeQuery(sql);
        while (resultSet.next()) {
%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div id="container">
            <div class="overlay2" id="overlay2">
                <div class="popup2" id="popup2">
                    <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                    <h3>Actualizar Caja</h3>
                    <h4>Ingresa los datos</h4>

                    <%--                       
                        try {
                            connection = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
                            statement = connection.createStatement();
                            String sql2 = "select * from caja where id_caja=" + id_caja;
                            resultSet = statement.executeQuery(sql2);
                            while (resultSet.next()) {


                    --%>
                    <form action="update-processCaja.jsp" method="post">
                        <div class="contenedor-etiquetas2">
                            <h4>Nombre</h4>
                            <h4>Efectivo</h4>
                        </div>
                        <div class="contenedor-inputs2">

                            <input type="text" name="nombre_codigo" value="<%=resultSet.getString("nombre_codigo")%>" placeholder="Nombre o codigo de caja" >

                            <input type="text" name="efectivo" value="<%=resultSet.getString("efectivo")%>" placeholder="Cantidad de efectivo">

                        </div>

                        <br>
                        <input type="submit" class="btn-submit" name="actualizar" value="Actualizar">
                    </form>
                    <%
                            }
                            connection.close();
                        } catch (Exception e) {
                            e.printStackTrace();
                        }
                    %>

                </div>
            </div>
        </div> 

    </body>
</html>

