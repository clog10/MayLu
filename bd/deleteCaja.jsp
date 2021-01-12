<%-- 
    Document   : deleteZap
    Created on : 11/01/2021, 04:57:02 PM
    Author     : AlejandroPlatas
--%>

<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*"%>
<%
    int id_caja = Integer.parseInt(request.getParameter("id_caja"));
    //String id_caja = request.getParameter("id_caja");
    try {
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
        Statement st = conn.createStatement();
        int i = st.executeUpdate("DELETE FROM caja WHERE id_caja=" + id_caja);
        out.println("Eliminado correctamente");
    } catch (Exception e) {
        System.out.print(e);
        e.printStackTrace();
    }
%>