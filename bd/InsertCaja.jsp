<%-- 
    Document   : InsertZap
    Created on : 11/01/2021, 02:13:08 PM
    Author     : AlejandroPlatas
--%>

<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
         pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*"%>

<%
    if (request.getParameter("guardar") != null) {
        String nombre_codigo = request.getParameter("nombre_codigo");
        int efectivo = Integer.parseInt(request.getParameter("efectivo"));
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/bdmaylu?user=root&password=");
            Statement st = conn.createStatement();

            int i = st.executeUpdate("insert into caja(nombre_codigo,efectivo)values('" + nombre_codigo + "'," + efectivo + ")");
            out.println("Agregado correctamente");

            //request.getRequestDispatcher("AdminCaja.jsp").forward(request, response);
            //RequestDispatcher dispatcher=getServletContext().getRequestDispatcher( "Maylu/build/web/AdminCaja.jsp" ); dispatcher.forward( request, response ); 
        } catch (Exception e) {
            System.out.print(e);
            e.printStackTrace();
        }
    }
%>