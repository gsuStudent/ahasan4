/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jdbcsample;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author rashad
 */
public class Db {
    private static final String USERNAME = "rashad";
    private static final String PASSWORD = "h";
    private static final String CONN = "jdbc:mysql://localhost:8889/test";

    public static Connection getconnection() throws SQLException{
        return DriverManager.getConnection(CONN, USERNAME, PASSWORD);
    }
    
}
