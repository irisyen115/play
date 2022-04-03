package jdk_test;

import java.util.Scanner;

class Point{
    private double x;
    private double y;

    public Point(double a,double b)
    throws Exception{
        x = a;
        y = b;
        if (x <= 0 || y<=0 ){
            String error = String.format(" invalid coordinate \n (%.2f ,%.2f)"  ,x,y);
            throw new Exception(error);
        } 
    }

    public void Dump() {
        System.out.printf("( %f,%f )\n",x,y);
    }

    public double GetX() {
        return x;
    }

    public double GetY() {
        return y;
    }
    
}


public class PointXD {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        try {
            double x1 = sc.nextDouble();
            double y1 = sc.nextDouble();
            Point p1 = new Point(x1,y1);


            double x2 = sc.nextDouble();
            double y2 = sc.nextDouble();    
            Point p2 = new Point(x2,y2);

            double dist = Distance(p1, p2);
            System.out.printf("%.2f\n",dist);
    
            Point p3 = Reflect(p1, p2);
            p3.Dump();
    
            System.out.printf("%.2f\n",M(p1, p2));
    
            Point p4 = Middle(p1, p2);
            p4.Dump();    
        } catch (Exception e) {
            System.out.println("Only the first quadrant is supported" + e.getMessage());
        } finally {
            sc.close();
        }         
        
    }

    public static double Distance(Point a, Point b) {
        double ax = a.GetX();
        double ay = a.GetY();
        double bx = b.GetX();
        double by = b.GetY();
        return Math.sqrt(Math.pow((bx-ax), 2) + Math.pow((by-ay), 2));

    }

    public static Point Reflect(Point a,Point b) throws Exception{
        double ax = a.GetX();
        double ay = a.GetY();
        double bx = b.GetX();
        double by = b.GetY();
        return new Point(2*bx-ax , 2*by-ay);
    }

    public static double M(Point a,Point b) {
        double ax = a.GetX();
        double ay = a.GetY();
        double bx = b.GetX();
        double by = b.GetY();
        return (bx-ax)/(by-ay);
    } 

    public static Point Middle(Point a,Point b) throws Exception{
        double ax = a.GetX();
        double ay = a.GetY();
        double bx = b.GetX();
        double by = b.GetY();
        return new Point((ax+bx)/2,(ay+by)/2);
    }
}
