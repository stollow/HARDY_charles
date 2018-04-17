package fr.mds.gameoflife.model;

public class DeadCell implements Cell {
	
	

	@Override
	public Cell newGeneration(int nbNeighbours) {
		if(nbNeighbours==3) {
			return new AliveCell();
		}
		else {
		if(nbNeighbours<2 || nbNeighbours>3) {
			return new DeadCell();
		}else {
			return new AliveCell();
		}
		}
	}
	
	@Override
	public boolean isAlive() {
		return false;
	}

	@Override
	public String getAsString() {
		return "-";
	}

	
}
