/**
 * This is a servlet for the Project Diary. 
 **/

package controller;

import java.io.IOException;
import java.math.RoundingMode;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.text.DateFormat;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Random;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

//import connector.SQLConnector;
//import controller.LogicConnector;
//import object.DiaryEntry;
/**
 * Servlet implementation for class DiaryServlet.
 */

public class DiaryServlet extends HttpServlet {

    public DiaryServlet() {
        super();
    }

    public void init(ServletConfig config) throws ServletException {
	
    }

    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	doPost(request, response);
    } // doGet

    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	
    } // doPost

} // DiaryServlet
