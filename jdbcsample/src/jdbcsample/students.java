/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jdbcsample;

import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author rashad
 */
public class students {
    public static void getStudent(ResultSet rs) throws SQLException{
        while(rs.next()){
 
 System.out.printf("%-10s%-15s%-15s%-25s%-25s%-22s\n",rs.getInt("id"),rs.getString("first_name"),rs.getString("last_name"),rs.getString("email"),rs.getString("skills"),rs.getString("phone"));
  

               //buffer.append(rs.getString("first_name"));
               //buffer.append(rs.getString("last_name"));
               //buffer.append(rs.getString("email")+'\t');
               //buffer.append(rs.getString("phone")+'\t');
               //buffer.append(rs.getString("skills")+'\t');

               
        }
            
        
    }
    
}
