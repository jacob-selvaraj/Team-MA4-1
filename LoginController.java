package com.example.controller;

import com.example.model.Demo;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.erb.blind.annotaion.RestController;

@RestController
public class LoginController
{
 @RequestMapping("/username")
public ArrayList<Demo> getusernameandpassword()
 {
  ArrayList<Demo> t=new ArrayList<Demo>();
  try
  {
   Class.forName("com.mysql.jdbc.Driver");
   Connection con=DriverManager.getConnection("url","username","password");
   String query="SELECT USERNAME AS NAME,PASSWORD AS PASS FROM LOGIN";
   PreparedStatement ps=con.prepareStatement(query);
   ResultSet rs=ps.excuteQuery();
   while(rs.next())
   {
     String username=rs.getString("NAME");
     String password=rs.getString("PASS");
     Demo d=new Demo();
     d.setusername(username);
     d.setpassword(password);
     t.add(d);
    }
   }
   catch(Exception e)
   {
       e.printStackTrace();
   }
  return t;
 }
}