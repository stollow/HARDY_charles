package fr.mds.gameoflife.model;

import java.util.Random;

public class World {
	
	Cell[][] worldSize;

	public World(int nbColumns,int nbRows) {
		worldSize= new Cell[nbColumns][nbRows];
		for (int i=0;i<nbColumns;i++) {
			for (int j=0;j<nbRows;j++) {
				Random deadOrAliveCell= new Random();
				if(deadOrAliveCell.nextBoolean()) {
					worldSize[i][j]= new AliveCell();
				}else {
					worldSize[i][j]= new DeadCell();
				}
			}
		}
	}
	
	public void newGeneration() {
		int neighbours=0;
		Cell newGeneration[][];
		newGeneration= new Cell[worldSize.length][worldSize[0].length];
		for (int i=0;i<worldSize.length;i++) {
			for (int j=0;j<worldSize[i].length;j++) {
				
				neighbours=0;
				
				for(int u=-1;u<=1;u++) {
					for(int v=-1;v<=1;v++) {
						if(u!=0 || v!=0) {
							int neighbourX = i + u;
							int neighbourY = j + v;
							if(neighbourX < worldSize.length && neighbourY < worldSize[i].length &&  neighbourX >= 0 && neighbourY >= 0) {
								if(worldSize[neighbourX][neighbourY].isAlive()) {
									neighbours++;
								}
							}
						}
					}
				}
				newGeneration[i][j]=worldSize[i][j].newGeneration(neighbours);
			}
		}
		worldSize=newGeneration;
			
	}

	@Override
	public String toString() {
		String world="";
		for (int i=0;i<worldSize.length;i++) {
			for (int j=0;j<worldSize[i].length;j++) {
				if(worldSize[i][j].isAlive()) {
					world += worldSize[i][j].getAsString();
				}else {
					world +=worldSize[i][j].getAsString();
				}
			}
			world+="\n";
		}
		return world;
		
		
	}

	

}
