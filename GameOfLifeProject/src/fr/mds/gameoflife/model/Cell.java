package fr.mds.gameoflife.model;

public interface Cell {
	Cell newGeneration(int nbNeighbours);
	String getAsString();
	boolean isAlive();
}
