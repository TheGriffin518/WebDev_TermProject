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

import logiclayer.LogicConnector;
import object.DiaryEntry;

/**
 * Servlet implementation for class DiaryServlet.
 */

@WebServlet("/DiaryServlet")
public class DiaryServlet extends HttpServlet {

    public DiaryServlet() {
        super();
    }

    public init(ServletConfig config) throws ServletException {
        super.init(config);
        process = new TemplateProcessor(templateDir, getServletContext());
    }

} // DiaryServlet