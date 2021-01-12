<%-- 
    Document   : update-processCaja
    Created on : 11/01/2021, 09:31:21 PM
    Author     : AlejandroPlatas
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.sql.*,java.util.*"%>


<%
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
    String nombre_codigo = request.getParameter("nombre_codigo");
    int efectivo = Integer.parseInt(request.getParameter("efectivo"));
    if (nombre_codigo != null) {
        Connection con = null;
        PreparedStatement ps = null;
        int personID = Integer.parseInt(nombre_codigo);
        try {
            Class.forName(driver);
            connection = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
            String sql = "UPDATE caja SET nombre_codigo=?,efectivo=?" + nombre_codigo;
            ps = con.prepareStatement(sql);
            ps.setString(1, nombre_codigo);
            ps.setInt(2, efectivo);
            int i = ps.executeUpdate();
            if (i > 0) {
                out.print("Actualizado");
            } else {
                out.print("There is a problem in updating Record.");
            }
        } catch (SQLException sql) {
            request.setAttribute("error", sql);
            out.println(sql);
        }
    }
%>


