package fr.mds.gameoflife.launcher;


import fr.mds.gameoflife.model.World;

public class Launcher {

	public static void main(String[] args) {
		World world = new World(10,20);
		for (int i=0;i<10;i++) {
		System.out.println("génération : "+(i+1)+"\n\n"+world.toString());
		world.newGeneration();
		}
	}
}
