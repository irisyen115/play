package jdk_test;

public class Animal {
    public void SayMyName() {
        System.out.println("I am " + name);
    }

    public void setName(String n) {
        name = n;
    }

    public String getName() {
        return name;
    }

    public double getBmi() {
        double Bmi = weight / (height*height);
        return Bmi;
    }

    public void setWeight(double w) {
        weight = w;
    }

    public void setHeight(double h) {
        height = h;
        if (height >= 3) {
            height = height/100;
        }
    }

    
    private String name;
    private double height = 1.68;
    private double weight = 90;
}
