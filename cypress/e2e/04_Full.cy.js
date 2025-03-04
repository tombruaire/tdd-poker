describe("POKER", () => {
    it("Test - Full", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('10Cœur');
        cy.get('select#main_carte2').select('10Carreau');
        cy.get('select#main_carte3').select('10Pique');
        cy.get('select#main_carte4').select('4Trefle');
        cy.get('select#main_carte5').select('4Cœur');
        cy.get('button#btnJouer').click();
    })
  })