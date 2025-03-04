describe("POKER", () => {
    it("Test - Couleur", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('AsTrefle');
        cy.get('select#main_carte2').select('10Trefle');
        cy.get('select#main_carte3').select('7Trefle');
        cy.get('select#main_carte4').select('6Trefle');
        cy.get('select#main_carte5').select('2Trefle');
        cy.get('button#btnJouer').click();
    })
  })