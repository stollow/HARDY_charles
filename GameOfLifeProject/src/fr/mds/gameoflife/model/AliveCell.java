package fr.mds.gameoflife.model;

public class AliveCell implements Cell {
	
	
	@Override
	public Cell newGeneration(int nbNeighbours) {
		if(nbNeighbours>=2 && nbNeighbours<=3) {
			return new AliveCell();
		}else {
			return new DeadCell();
		}
	}

	@Override
	public boolean isAlive() {
		return true;
	}

	@Override
	public String getAsString() {
		return "0";
	}
}
